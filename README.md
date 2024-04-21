# URL Trimmer

## Overview
A secure, unlimited URL shortening service, meticulously designed by a cybersecurity engineer. With its simple web interface, users can effortlessly input lengthy URLs and receive shortened versions, streamlining the process of link distribution and sharing across various platforms.

## How to Use
The user interface of the URL Shortening project is designed with simplicity and functionality in mind : 
- _**Input Long URL  :**_  Start by entering the long URL that you wish to shorten, into the designated input field provided on the web page.
- _**Click Shorten  :**_  Once you've entered the long URL, proceed to click the `Shorten` button to initiate the shortening process.
- _**Copy Shortened URL  :**_  After the shortening process is complete, the shortened URL will be generated and displayed on the page. You can then conveniently copy it to your clipboard using the `Copy` button provided for easy sharing.

## Working Mechanism
The URL Shortener functions through a series of systematic steps :

- _**User Input  :**_  Users interact with the URL Shortener by entering a long URL into the provided input field on the web interface. This input field serves as the entry point for the URL shortening process.
- _**Validation  :**_  Upon submission of the long URL, the input undergoes validation to ensure it conforms to a proper URL format. This validation step is crucial for maintaining the integrity and accuracy of the shortening process.
- _**Shortening Process  :**_  After successful validation, the URL Shortener proceeds to shorten the long URL by generating a unique shortened version. This process typically involves utilizing a hashing algorithm, such as `SHA-256`, to create a compact representation of the original URL.
4. _**Database Storage  :**_  Once the shortened URL is generated, both the original long URL and its corresponding shortened version are securely stored in a MySQL database.
5. _**Return Shortened URL  :**_ Upon successful completion of the shortening process and database storage, the shortened URL is promptly returned to the user.

## Files & Components
- `index.html` : HTML file serving as the primary interface for users to input long URLs and view shortened versions.
- `shorten.php` : PHP script responsible for processing long URLs, generating shortened versions, and securely storing them in the MySQL database.
- `redirect.php` : PHP script managing the redirection of shortened URLs to their original long versions.
- `styles.css` : CSS file containing styles to enhance the visual presentation and user experience of the web interface.
- `script.js` : JavaScript functionalities handling client-side validation and user interaction.

