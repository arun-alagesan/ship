# ship

Repo for re writing the site `http://seeas.org/ship/index.php` building the same with angular 9 with node.js backend api.

ship -> mdb-ui is the angular project `cd mdb-ui` 
for the first time run the `npm install` the dependencies and do `npm build && npm start` to launch the app in the browser.
refer [mdb-ui/README.md](/mdb-ui/README.md) for instructions

ship -> service-api is the node.js backend api backed up with express.js for serving the api.
`cd service-api` and do `npm install` for the first time and then `npm start`

TODO List:

1. Add swagger support for the API docs to servvice-api
2. Change the javascript mode of the service-api to TypeScript to avoid ambigous tyope and strict typing to the code
3. Add docker support for containarization of the UI and Service API for easy deployments
4. Production readiness to add support for build and package of the build artifacts
