requirejs.config({
    waitSeconds: 60,
    paths: {
        jquery: "libs/jquery-3.1.0",
        bootstrap: "libs/bootstrap",
        // Modules
        home: "modules/homePage"
    },
    map: {
        "*": {
            "css": "require/require_css/css"
        }
    },
    shim: {
        bootstrap: {
            deps: ["jquery"]
        }
    }
});
define([
    "bootstrap"
], function() {
    window.requireCoreModulesLoad.loaded();
    // Core modules loaded
});
