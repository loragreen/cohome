var UI = {
    init: function() {
        this.galleryPreviewEffect();
        this.gallery();
    },
    galleryPreviewEffect: function() {
        var container = jQuery('.gallery-preview'),
            figure = container.find('figure');

        figure.hover(function(){
            var index = jQuery(this).index();
            container.toggleClass('hovered-'+index);
        });
    },
    gallery: function() {
        jQuery('.gallery').finalTilesGallery({
            minTileWidth: 100
        });
    }
}

jQuery(document).ready(function() {

    UI.init();

});