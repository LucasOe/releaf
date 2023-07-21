/* Generates static html from the php source. This is for demo purposes only
 and not intended to be used in production. */

import scrape from 'website-scraper';

function is_php(url) {
    return url.split(/[#?]/)[0].split('.').pop().trim() == "php";
}

class PhpToHtml {
	apply(registerAction) {
        registerAction('afterResponse', ({response}) => {
            if (response.statusCode === 404)
                return null;

            // Replace .php with .html
            if(is_php(response.url)) {
                var body = response.body.toString().replace(/.php/g, ".html");

                return {
                    body: Buffer.from(body, response.encoding),
                    metadata: response.metadata,
                    encoding: response.encoding,
                }
            }

            return response;
        });
    }
}

await scrape({
  urls: [
    { url: "http://127.0.0.1:8000/index.php", filename: "index.html" },
    { url: "http://127.0.0.1:8000/cart.php", filename: "cart.html" },
    { url: "http://127.0.0.1:8000/contact.php", filename: "contact.html" },
    { url: "http://127.0.0.1:8000/product.php?id=3", filename: "product.html" },
    { url: "http://127.0.0.1:8000/register.php", filename: "register.html" },
    { url: "http://127.0.0.1:8000/shop.php", filename: "shop.html" },
  ],
  directory: "./out",
  plugins: [ new PhpToHtml() ]
});