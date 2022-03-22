CREATE TABLE Usuario (
    nome varchar(100),
    email_log varchar(100) PRIMARY KEY,
    senha varchar(100),
    dataNasc date,
    dataCad date
);

DROP TABLE IF EXISTS email;
CREATE TABLE Email (
    id int PRIMARY KEY,
    email_dest varchar(100),
    data_envio date,
    status int,
    conteudo longtext,
    assunto varchar(100),
    cc int,
    email_reme varchar(100)
);
 
ALTER TABLE Email ADD CONSTRAINT FK_Email_2
    FOREIGN KEY (email_reme)
    REFERENCES Usuario (email_log)
    ON DELETE RESTRICT;