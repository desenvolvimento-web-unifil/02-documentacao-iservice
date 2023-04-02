```mermaid

---
title: Site de apostas
---
erDiagram
    Usuario ||--|| Carteira : possui
    Usuario }o--o{ Apostas : participa
     Usuario }o--o{ Jogos : participa



    Usuario {
        string CPF PK
        string Nome
        string senha
        string Email
        date dataNasc
        boolean tipo
    }

    Carteira {
        Int ID PK
        String CPF FK
        Double QntdMoedas
        String Cartao
    }

    Apostas {
        int ID PK
        string CPFjogadores FK
        string opcoes
        string descricao
        double saldoAcumulado
    }

    Jogos {
        int ID PK
        string CPFjogadores FK
        string descricao
        double saldoAcumulado
    }


```