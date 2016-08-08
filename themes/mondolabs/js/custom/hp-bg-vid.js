// // jQuery for the big homepage video
// var min_w = 300; // minimum video width allowed
// var vid_w_orig;  // original video dimensions
// var vid_h_orig;

// jQuery(function() { // runs after DOM has loaded

//     vid_w_orig = parseInt(jQuery('#bgvid').attr('width'));
//     vid_h_orig = parseInt(jQuery('#bgvid').attr('height'));
//     $('#debug').append("<p>DOM loaded</p>");

//     jQuery(window).resize(function () { resizeToCover(); });
//     jQuery(window).trigger('resize');
// });

// function resizeToCover() {

//     // set the video viewport to the window size
//     jQuery('#hp-bg-vid').width(jQuery(window).width());
//     jQuery('#hp-bg-vid').height(jQuery(window).height());

//     // use largest scale factor of horizontal/vertical
//     var scale_h = jQuery(window).width() / vid_w_orig;
//     var scale_v = jQuery(window).height() / vid_h_orig;
//     var scale = scale_h > scale_v ? scale_h : scale_v;

//     // don't allow scaled width < minimum video width
//     if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};

//     // now scale the video
//     jQuery('#bgvid').width(scale * vid_w_orig);
//     jQuery('#bgvid').height(scale * vid_h_orig);
//     // and center it by scrolling the video viewport
//     jQuery('#hp-bg-vid').scrollLeft((jQuery('#bgvid').width() - jQuery(window).width()) / 2);
//     jQuery('#hp-bg-vid').scrollTop((jQuery('#bgvid').height() - jQuery(window).height()) / 2);

// };

