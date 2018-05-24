    function ShopifyBuyInit() {

    var client = ShopifyBuy.buildClient({

      domain: 'the-lev.myshopify.com',
      storefrontAccessToken: 'b788e9fc81b14cda5e8ea36b20422998',

    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {

      $(".wps-buy-button").each(function () {

            //product-component-
            var elementId = this.id;
            //number starts with 1...
            var productId = $(this).attr("data-id");
            //console.log(elementId);
            //console.log(productId);

            /*varId = $(this).attr("data-var");
            if (varId) {
                elementId = productId + "-" + varId;
            } else {
                elementId = productId;
            }*/
      
      ui.createComponent('product', {
       
        //call unique id
        id: [parseInt(productId)], 
        //variantId: parseInt(varId),
        //call unique product component
        node: document.getElementById(elementId),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "width": "80px",
    "buttonDestination": 'modal',
    "iframe": false,
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      //"options": (varId == "all"),
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "Buy"
    },
    "styles": {
      "product": {
        "text-align": "left",
        "@media (min-width: 180px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px"
      }
    }
  },
  "cart": {
    // "iframe": false,
    "contents": {
      "button": true
    },
    "styles": {
      "title": {
        "font-family": "castledown-bold",
        "font-weight": "400",
      },
      "lineItems": {
        "font-family": "castledown-bold",
        "font-weight": "400",
      },
      "subtotalText": {
        "font-family": "castledown-bold",
        "font-weight": "400",
      },
      "subtotal": {
        "font-family": "castledown-bold",
        "font-weight": "400",
      },
      "notice": {
        "font-family": "castledown-bold",
        "font-weight": "400",
      },
      "button": {
        "border-width": "1px",
        "border-style": "solid",
        "border-color": "#56622b",
        "font-family": "castledown-bold",
        "font-weight": "bold",
        "background-color": "#fff3e7",
        "color": "#56622b",
        "font-size": "13px",
        "padding-top": "7px",
        "padding-bottom": "7px",
        ":hover": {
          "background-color": "#e6dbd0",
          "color": "#56622b"
        },
        "border-radius": "0px",
        ":focus": {
          "background-color": "#56622b",
          "color": "#fff3e7",
          "border-width": "1px !important",
          "border-style": "solid !important",
          "border-color": "#fff3e7 !important"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": true,
      "imgWithCarousel": false,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "font-family": "castledown-bold",
        "font-weight": "400",
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        //add
        "border-width": "1px",
        "border-style": "solid",
        "border-color": "#56622b",
        "font-family": "castledown-bold",
        "font-weight": "400",
        //end
        "background-color": "#fff3e7",
        "color": "#56622b",
        "font-size": "14px",
        "padding-top": "7px",
        "padding-bottom": "7px",
        "padding-left": "20px",
        "padding-right": "20px",
        ":hover": {
          "background-color": "#56622b",
          "color": "#fff3e7"
        },
        "border-radius": "0px",
        ":focus": {
          "background-color": "#56622b",
          "color": "#fff3e7",
          "border-width": "1px !important",
          "border-style": "solid !important",
          "border-color": "#fff3e7 !important"
        }
      },
      "quantityInput": {
        "border-color": "#56622b",
        "border-right": "1px solid !important",
        "border-radius": "0px",
        "font-size": "13px",
        "padding-top": "7px",
        "padding-bottom": "7px",
        "margin-right":"10px"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "color":"#fff3e7",
        "fill": "#fff3e7",
        "background-color": "#56622b",
        ":hover": {
          "background-color": "#56622b",
          "color": "#fff3e7"
        },
        ":focus": {
          "background-color": "#56622b",
          "color": "#fff3e7",
          "border-width": "1px !important",
          "border-style": "solid !important",
          "border-color": "#fff3e7 !important"
        }
      },
      "count": {
        "color": "#fff3e7",
        ":hover": {
          "color": "#fff3e7"
        },
        "font-size": "14px"
      },
      "iconPath": {
        "fill": "#fff3e7"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
    });
  }