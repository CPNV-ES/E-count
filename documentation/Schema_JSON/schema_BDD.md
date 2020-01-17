```json

{
    "costs": [
        {
            "id":[id],
            "date": [date],
            "description": [string],
            "categories": {
                "id": [id],
            },
            "price": [float],
            "waysOfPayment": {
                "id":[id],
            },
            "status": {
                "id":[id],
            },
            "users": {
                "id": [id],
            }
        }
    ],

    "users": [
        {
            "id": [id],
            "name":[string],
            "email":[string],
            "password":[string],
        }
    ],

    "waysOfPayment":[
        {
            "id": [id],
            "name": [string]
        }
    ],

    "categories":[
        {
            "id": [id],
            "name": [string]
        }
    ],

    "status":[
        {
            "id": [id],
            "name": [string]
        }
    ]
}


```