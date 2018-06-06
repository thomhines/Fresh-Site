$(function() {
  $.ajax({
    url:
      "https://docs.google.com/spreadsheets/d/e/2PACX-1vQCRb80LuurEBqCEruiOBTCvLXGhJlm6iJQZ0zNHXO7jac1mnKchGr8zNbI1XRGWmQVowwWJqCJYBw6/pub?output=csv",

    success: function(data) {
      // Convert CSV data to JS Object (JSON). This uses jquery.csv.min.js
      artist_data = $.csv.toObjects(data);

      x = 0;
      artist_data.forEach(function() {
        // Skip this user if the 'is_visible' field is empty or 0 (assuming you have an is_visible field to hide/show people)
        // if(artist_data[x]['is_visible'] == 0) return;

        // Extract seller image id
        seller_string = artist_data[x]["Seller Photo"];
        seller_id_pos = seller_string.indexOf("id=") + 3;
        seller_id = seller_string.substr(seller_id_pos);

        // Extract 1st product image id
        product1_string = artist_data[x]["Product Photo 1"];
        product1_id_pos = product1_string.indexOf("id=") + 3;
        product1_id = product1_string.substr(product1_id_pos);

        // Extract 2nd product image id
        product2_string = artist_data[x]["Product Photo 2"];
        product2_id_pos = product2_string.indexOf("id=") + 3;
        product2_id = product2_string.substr(product2_id_pos);

        // Extract 3rd product image id
        product3_string = artist_data[x]["Product Photo 3"];
        product3_id_pos = product3_string.indexOf("id=") + 3;
        product3_id = product3_string.substr(product3_id_pos);

        // Loop through all rows in spreadsheet and create a new div for each person
        $(".seller-roster-container").append(
          `
            <div class="seller-object">
                <div class="seller-object-top">
                    <div class="seller-photo">
                        <img src="https://drive.google.com/thumbnail?id=` +
            seller_id +
            `">
                    </div>
                    <div class="seller-carousel fotorama" data-loop="true" data-keyboard="true" data-arrows="always" data-fit="cover" data-width="360px" data-height="360px">
                    <img src="https://drive.google.com/thumbnail?id=` +
            product1_id +
            `&sz=w360-h360">
                    <img src="https://drive.google.com/thumbnail?id=` +
            product2_id +
            `&sz=w360-h360">
                    <img src="https://drive.google.com/thumbnail?id=` +
            product3_id +
            `&sz=w360-h360">
                    </div>
                </div>
                <div class="seller-object-bottom">
                    <div class="seller-name">
                        <h2 class="blue">` +
            artist_data[x]["Seller Name"] +
            `</h2>
                    </div>
                    <div class="seller-tagline">
                        <p class="blue bold">` +
            artist_data[x]["Store Tagline"] +
            `</p>
                    </div>
                    <div class="seller-description">
                        <p>` +
            artist_data[x]["Store Description"] +
            `</p>
                    </div>
                    <div class="seller-buttons">
                        <a href="` +
            artist_data[x]["Seller Portfolio"] +
            `" class="no-underline">
                            <div class="seller-portfolio">
                                <p class="bold black">Seller Portfolio</p>
                            </div>
                        </a>
                        <a href=` +
            artist_data[x]["Store Link"] +
            ` class="no-underline">
                            <div class="seller-shop">
                                <p class="bold white">Go To Shop</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>`
        );

        // Add 1 to x to move to next row of spreadsheet
        x = x + 1;
        $.getScript("../fotorama-4.6.4/fotorama.js", function() {});
      });
    }
  });
});