/*$(document).ready(function () {
    var userFeed = new Instafeed({
        get: "user",
        userId: "3983405194",
        limit: 9,
        resolution: "standard_resolution",
        accessToken: "3983405194.1677ed0.d2bd7fe0f0a84cbfa88fd90279ef1b7c",
        sortBy: "most-recent",
        template: '<div class= "col-lg-4 col-md-6 col-sm-6 col-xs-12"><img src="{{image}}" alt="{{caption}}"></div>'
    });
    userFeed.run();
});*/


var galleryFeed = new Instafeed({
    get: "user",
    userId: 3983405194,
    accessToken: "3983405194.1677ed0.e85af734385a4a1cade726f906bb82dc",
    resolution: "standard_resolution",
    useHttp: "true",
    limit: 9,
    sortBy: "most-recent",
    template: '<div class="col-xs-12 col-sm-6 col-md-4" style="padding-left: 20px; padding-right: 20px; padding-bottom: 20px; padding-top: 20px"><a href="{{link}}" target="_blank" id="{{id}}"><div class="img-featured-container"><div class="img-backdrop"></div><div class="description-container"><span class="likes"><i class="fas fa-heart"></i> {{likes}}</span><span class="comments"><i class="fas fa-comment"></i> {{comments}}</span></div><img src="{{image}}" class="img-responsive"></div></a></div>',
    target: "instafeed-gallery-feed",
    after: function () {
        // disable button if no more results to load
        if (!this.hasNext()) {
            btnInstafeedLoad.setAttribute('disabled', 'disabled');
        }
    },
});
galleryFeed.run();

var btnInstafeedLoad = document.getElementById("btn-instafeed-load");
btnInstafeedLoad.addEventListener("click", function () {
    galleryFeed.next()
});