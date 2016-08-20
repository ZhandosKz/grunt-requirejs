"use strict";

module.exports = function() {
    return {
        options: {
            keepBuildDir: true,
            appDir: "static",
            mainConfigFile: "static/common.js",
            baseUrl: "./",
            dir: "static_build",
            siteRoot: ".",
            wrapShim: true,
            modules: [
                {
                    name: "common",
                    include: [
                        "bootstrap"
                    ]
                },
                {
                    name: "entries/home",
                    include: [
                        "home/app"
                    ]
                }
            ]
        }
    };
};