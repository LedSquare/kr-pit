readRenviron("rworkspace/.Renviron")

library(DBI)
library(RPostgres)
library(dbplyr)
library(glue)
library(dplyr)
library(ggplot2)

conn <- dbConnect(
    RPostgres::Postgres(),
    host = 'db',
    port = Sys.getenv("DB_PORT"),
    user = Sys.getenv("DB_USERNAME"),
    password = Sys.getenv("DB_PASSWORD"),
    dbname =  Sys.getenv("DB_DATABASE"),
)

query = dbSendQuery(conn, "SELECT c.id as client_id, c.first_name, c.last_name,
o.id as order_id, o.final_price, cm.name as model_name from orders o
join clients c on c.id = o.client_id
join clothes_models cm on cm.id = o.clothes_model_id")
res = dbFetch(query)
print(res)

summary(res)

install.packages("ggplot2")
library(ggplot2)


query = dbSendQuery(conn,"SELECT c.id as client_id, c.first_name, c.last_name,
o.id as order_id, o.final_price, cm.name as model_name from orders o
join clients c on c.id = o.client_id
join clothes_models cm on cm.id = o.clothes_model_id
where c.id = 1")
res = dbFetch(query)

ggplot(res, aes())
