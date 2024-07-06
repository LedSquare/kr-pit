readRenviron("rworkspace/.Renviron")

library(DBI)
library(RPostgres)
library(dbplyr)
library(glue)
library(dplyr)

conn <- dbConnect(
    RPostgres::Postgres(),
    host = 'db',
    port = Sys.getenv("DB_PORT"),
    user = Sys.getenv("DB_USERNAME"),
    password = Sys.getenv("DB_PASSWORD"),
    dbname =  Sys.getenv("DB_DATABASE"),
)


