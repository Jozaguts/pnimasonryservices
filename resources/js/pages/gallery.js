import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';
import PhotoSwipe from 'photoswipe'
const galleries = {
    1: [
        {
            src: '/data/images/gallery/1/P1422026.jpg',
            w: 900,
            h: 1100,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422043.jpg',
            w: 900,
            h: 934,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422048.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422049.jpg',
            w: 900,
            h: 752,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422050.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422051.jpg',
            w: 900,
            h: 1170,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422053.jpg',
            w: 900,
            h: 771,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422054.jpg',
            w: 900,
            h: 1138,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422055.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422060.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422061.jpg',
            w: 900,
            h: 498,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422066.jpg',
            w: 900,
            h: 984,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422068.jpg',
            w: 900,
            h: 468,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422069.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422074.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422075.jpg',
            w: 900,
            h: 916,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422076.jpg',
            w: 900,
            h: 546,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422077.jpg',
            w: 900,
            h: 741,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422078.jpg',
            w: 900,
            h: 777,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422079.jpg',
            w: 900,
            h: 761,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422084.jpg',
            w: 900,
            h: 765,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422085.jpg',
            w: 900,
            h: 829,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422086.jpg',
            w: 900,
            h: 490,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422090.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422092.jpg',
            w: 900,
            h: 960,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422094.jpg',
            w: 900,
            h: 622,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422095.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422096.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422097.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422098.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422100.jpg',
            w: 900,
            h: 582,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422101.jpg',
            w: 900,
            h: 514,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/1/P1422103.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
    ],
    2: [
        {
            src: '/data/images/gallery/2/1.jpg',
            w: 900,
            h: 1970,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/2.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/3.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/4.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/5.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/6.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/7.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/2/8.jpg',
            w: 900,
            h: 416,
            alt: 'test image 1'
        },

    ],
    3: [
        {
            src: '/data/images/gallery/3/1.jpg',
            w: 1080,
            h: 1080,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/2.jpg',
            w: 1080,
            h: 1440,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/3.jpg',
            w: 1080,
            h: 1440,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/4.jpg',
            w: 996,
            h: 2048,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/5.jpg',
            w: 960,
            h: 960,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/6.jpg',
            w: 720,
            h: 960,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/7.jpg',
            w: 960,
            h: 960,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/8.jpg',
            w: 960,
            h: 960,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/3/9.jpg',
            w: 1080,
            h: 1440,
            alt: 'test image 1'
        },
    ],
    4:[
        {
            src: '/data/images/gallery/4/1.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/4/2.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/4/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/4/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/4/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/4/3.jpg',
            w: 2028,
            h: 1536,
            alt: 'test image 1'
        },

    ],
    5:[
        {
            src: '/data/images/gallery/5/1.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/2.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/4.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/5.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/6.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/7.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/5/8.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
    ],
    6:[
        {
            src: '/data/images/gallery/6/1.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/2.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/4.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/5.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/6.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/7.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/8.jpg',
            w: 900,
            h: 506,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/9.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/10.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/11.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/12.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/13.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/14.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/15.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/16.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/17.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/18.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/19.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/20.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/21.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/6/22.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
    ],
    7:[
        {
            src: '/data/images/gallery/7/1.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/2.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/3.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/4.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/5.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/6.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/7.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/8.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/9.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/10.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/11.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/12.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/13.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/14.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/15.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/16.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/17.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/18.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/19.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/20.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/21.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/22.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/23.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/24.jpg',
            w: 900,
            h: 1200,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/25.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
        {
            src: '/data/images/gallery/7/26.jpg',
            w: 900,
            h: 675,
            alt: 'test image 1'
        },
    ],
}
const options = {
    dataSource: [],
    showHideAnimationType: 'none'
};
window.showGallery = (event) => {
    options.index = 0;
    options.dataSource = galleries[event.dataset.id];
    const pswp = new PhotoSwipe(options);
    pswp.init();
};
