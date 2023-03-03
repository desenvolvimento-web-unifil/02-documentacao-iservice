```mermaid

---
title: Site de apostas
---
erDiagram
    User ||--o{ ORDER : places
    User {
        string name
        int ID
        string sector
    }
    ORDER ||--|{ LINE-ITEM : contains
    ORDER {
        int orderNumber
        string deliveryAddress
    }
    LINE-ITEM {
        string productCode
        int quantity
        float pricePerUnit
    }


```