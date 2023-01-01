<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card View Payment</title>
    <style></style>
</head>

<body>
    <h1>Card View Payment</h1>

    <script src="https://demo.myfatoorah.com/cardview/v2/session.js"></script>
    <div style="width:400px">
        <div id="card-element"></div>
    </div>
    <button onclick="submit()">Pay Now</button>


    <script>
        var config = {
            countryCode: "", // Here, add your Country Code.
            sessionId: "", // Here you add the "SessionId" you receive from InitiateSession Endpoint.
            cardViewId: "card-element",
            onCardBinChanged: handleBinChanges,
            // The following style is optional.
            style: {
                hideCardIcons: false,
                direction: "ltr",
                cardHeight: 130,
                input: {
                    color: "black",
                    fontSize: "13px",
                    fontFamily: "sans-serif",
                    inputHeight: "32px",
                    inputMargin: "0px",
                    borderColor: "c7c7c7",
                    borderWidth: "1px",
                    borderRadius: "8px",
                    boxShadow: "",
                    placeHolder: {
                        holderName: "Name On Card",
                        cardNumber: "Number",
                        expiryDate: "MM / YY",
                        securityCode: "CVV",
                    }
                },
                label: {
                    display: false,
                    color: "black",
                    fontSize: "13px",
                    fontWeight: "normal",
                    fontFamily: "sans-serif",
                    text: {
                        holderName: "Card Holder Name",
                        cardNumber: "Card Number",
                        expiryDate: "Expiry Date",
                        securityCode: "Security Code",
                    },
                },
                error: {
                    borderColor: "red",
                    borderRadius: "8px",
                    boxShadow: "0px",
                },
            },
        };
        myFatoorah.init(config);

        function submit() {
            myFatoorah.submit()
                // On success
                .then(function(response) {
                    // Here you need to pass session id to you backend here
                    var sessionId = response.sessionId;
                    var cardBrand = response
                    .cardBrand; //cardBrand will be one of the following values: Master, Visa, Mada, Amex
                })
                // In case of errors
                .catch(function(error) {
                    console.log(error);
                });
        }

        function handleBinChanges(bin) {
            console.log(bin);
        }
    </script>

</body>

</html>
