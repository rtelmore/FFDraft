## Ryan Elmore
## 7 Sept 2010
## Fantasy Football Draft 2010

## Copyright (c) 2010, under the Simplified BSD License.  
## For more information on FreeBSD see: 
##      http://www.opensource.org/licenses/bsd-license.php
## All rights reserved.                      

## I don't even know what that means, but other repositories tend to
##  have something similar (if not exact -- Thanks Drew Conway)! 

wd.path <- "~/Side_Projects/Sports/FFDraft/src/"

## Dependencies:
source(paste(wd.path, "load.R", sep=""))


# url <- "http://fantasyfootballcalculator.com/adp.php/"

url <- "../html/adp.php"

doc <- htmlTreeParse(url, useInternalNodes=T)
sim.draft.stats <- getNodeSet(doc, "//div/table[@class='adp']")
sim.table.stats <- lapply(sim.draft.stats, readHTMLTable, header = TRUE,
  stringsAsFactors = FALSE)[[1]]

our.draft.stats <- read.csv("../data/ffldraft2010.csv", header = T, 
							stringsAsFactors = F)
n <- length(our.draft.stats$Player.Name)
draft.df <- data.frame(player = 1:n, owner = 1:n, sim.pick = 1:n,
	 										 pick = 1:n, sim.std = 1:n, Rnd = 1:n)
for (i in 1:n){
  draftee <- strsplit(as.character(our.draft.stats$Player.Name[i]), ",")[[1]]
  ifelse(draftee[2] == ' D', {
      team.str <- strsplit(as.character(draftee[1]), " ")[[1]]
      ifelse (length(team.str) == 3, team <- paste(team.str[1], team.str[2], 
        sep = " "), team <- team.str[1])
      player <- paste(team, "Defense", sep = " ")
    }, 
    {player <- draftee[1]}
  )
  sim.player.stats <- sim.table.stats[sim.table.stats$Name == player, ]
  draft.df[i,] <- c(player, our.draft.stats$Owner[i],
		  		as.numeric(sim.player.stats$Overall)[1], our.draft.stats$Pick..[i], 
		  		as.numeric(sim.player.stats$Std.Dev)[1], our.draft.stats$Rnd[i])
}

## Edit Mike Williams & Steve Smith
draft.df[44,c(3,5)] <- c(36.3, 6.1)
draft.df[160,c(3,5)] <- c(148.9, 19.0)

draft.df$sim.std <- as.numeric(draft.df$sim.std)
draft.df$sim.pick <- as.numeric(draft.df$sim.pick)
draft.df$pick <- as.numeric(draft.df$pick)
draft.df$Rnd <- as.numeric(draft.df$Rnd)



draft.df$score <- (draft.df$pick - draft.df$sim.pick)/draft.df$sim.std

ggplot(data = draft.df, aes(x = Rnd, y = owner, fill = score)) + 
  geom_tile() + 
  scale_fill_continuous("score") + 
	scale_x_continuous("round")

ggsave("../fig/std_scores.pdf", hei = 7, wid = 7)

ggplot(data = draft.df, aes(x = Rnd, y = score, col = owner)) + 
  geom_line() + 
  scale_fill_continuous("score")

ggplot(data = draft.df, aes(x = pick, y = score, col = owner)) + 
  geom_point() 
