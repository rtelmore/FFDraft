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

our.draft.stats <- read.csv("../data/ffldraft2010.csv", header = T)
n <- length(our.draft.stats$Player.Name)

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
  print(c(player, as.numeric(sim.player.stats$Overall)))
}


nset.attendance <- getNodeSet(doc, 
  "//div/table[@class='sortable-first stats attendance']")
table.attendance <- lapply(nset.attendance, readHTMLTable, header = FALSE)
df.stats <- table.stats[[1]]
df.attendance <- table.attendance[[1]]
df.stats[order(df.stats$V1), ]
df.attendance[order(df.attendance$V1), ]
df.total <- merge(df.stats, df.attendance, by = "V1", all = TRUE)
df.total$year <- rep(years[i], length(df.total$V1))  
df.final <- rbind(df.final, df.total)
out.string.2 <- paste(Sys.time(), paste(" -- Year: ", years[i], sep = ""), 
                    sep = "")

auth <- getGoogleAuth("rtelmore@gmail.com", p.wd)

con <- getGoogleDocsConnection(auth, service = "wise")
sheets <- getDocs(con)

ff.dat <- sheetAsMatrix(sheets$ffldraft2010, "data.frame")

ff.ws <- getWorksheets("ffldraft2010", sheet.con)

