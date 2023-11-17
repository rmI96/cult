document.addEventListener('DOMContentLoaded', () => {

    const _functions = {};

    (function() {
        "use strict"

        /*###############*/
        /* FUNCTION ON DOCUMENT READY */
        /*###############*/

        _functions.crossBrowser = function () {
            const e = document.querySelector('body')

            if (navigator.userAgent.indexOf("Firefox") >= 0) {
                e.classList.add('firefox')
            }
            if (navigator.userAgent.indexOf('Edge') >= 0) {
                e.classList.add('edge')
            }
            if (navigator.userAgent.indexOf("Trident") >= 0) {
                e.classList.add('ie')
            }
            if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
                e.classList.add('safari')
            }
            if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
                e.classList.add('chrome')
            }
        }
        _functions.crossBrowser()

        setTimeout( function(){
            const e = document.querySelector('#loader-wrapper')
            if(e){
                e.style.display = 'none'
            }
        },150);

        /*###############*/
        /* ANIMATIONS */
        /*###############*/

        _functions.customAnimation = function() {
            const e = document.querySelectorAll('.animation')
            if (e.length) {
                e.forEach(function(e) {
                    if(e.offsetTop < window.scrollY + window.innerHeight){
                        e.classList.add('animated')
                    }
                });
            }
        }
        _functions.customAnimation()

        /*###############*/
        /* SCROLL */
        /*###############*/
        addEventListener('scroll', _functions.customAnimation)

        /*###############*/
        /* SLIDE */
        /*###############*/
        function _slide(el, duration, callback, isDown) {

            if (typeof duration === 'undefined') duration = 400;
            if (typeof isDown === 'undefined') isDown = false;

            el.style.overflow = "hidden";
            if (isDown) el.style.display = "block";

            const elStyles        = window.getComputedStyle(el);

            const elHeight        = parseFloat(elStyles.getPropertyValue('height'));
            const elPaddingTop    = parseFloat(elStyles.getPropertyValue('padding-top'));
            const elPaddingBottom = parseFloat(elStyles.getPropertyValue('padding-bottom'));
            const elMarginTop     = parseFloat(elStyles.getPropertyValue('margin-top'));
            const elMarginBottom  = parseFloat(elStyles.getPropertyValue('margin-bottom'));

            const stepHeight        = elHeight        / duration;
            const stepPaddingTop    = elPaddingTop    / duration;
            const stepPaddingBottom = elPaddingBottom / duration;
            const stepMarginTop     = elMarginTop     / duration;
            const stepMarginBottom  = elMarginBottom  / duration;

            let start;

            function step(timestamp) {

                if (start === undefined) start = timestamp;

                const elapsed = timestamp - start;

                if (isDown) {
                    el.style.height        = (stepHeight        * elapsed) + "px";
                    el.style.paddingTop    = (stepPaddingTop    * elapsed) + "px";
                    el.style.paddingBottom = (stepPaddingBottom * elapsed) + "px";
                    el.style.marginTop     = (stepMarginTop     * elapsed) + "px";
                    el.style.marginBottom  = (stepMarginBottom  * elapsed) + "px";
                } else {
                    el.style.height        = elHeight        - (stepHeight        * elapsed) + "px";
                    el.style.paddingTop    = elPaddingTop    - (stepPaddingTop    * elapsed) + "px";
                    el.style.paddingBottom = elPaddingBottom - (stepPaddingBottom * elapsed) + "px";
                    el.style.marginTop     = elMarginTop     - (stepMarginTop     * elapsed) + "px";
                    el.style.marginBottom  = elMarginBottom  - (stepMarginBottom  * elapsed) + "px";
                }

                if (elapsed >= duration) {
                    el.style.height        = "";
                    el.style.paddingTop    = "";
                    el.style.paddingBottom = "";
                    el.style.marginTop     = "";
                    el.style.marginBottom  = "";
                    el.style.overflow      = "";
                    if (!isDown) el.style.display = "none";
                    if (typeof callback === 'function') callback();
                } else {
                    window.requestAnimationFrame(step);
                }
            }

            window.requestAnimationFrame(step);
        }

        _functions.slideToggle = function(el, duration, callback) {
            if (el.clientHeight === 0) {
                _slide(el, duration, callback, true);
            } else {
                _slide(el, duration, callback);
            }
        }

        _functions.slideUp = function(el, duration, callback) {
            _slide(el, duration, callback);
        }

        _functions.slideDown = function(el, duration, callback) {
            _slide(el, duration, callback, true);
        }

        /*###############*/
        /* SWIPER */
        /*###############*/
        _functions.getSwOptions = function(swiper){
            let options = JSON.parse(swiper.getAttribute('data-options')),
                slidesLength = swiper.querySelectorAll('.swiper-slide').length

            options = (!options || typeof options !== 'object') ? {} : options
            let $p = swiper.closest('.swiper-entry')

            if (slidesLength === 1) $p.classList.add('single-slide-swiper')

            if(!options.pagination) options.pagination = {
                el: $p.querySelector('.swiper-pagination'),
                clickable: true
            }
            if(!options.navigation) options.navigation = {
                nextEl: $p.querySelector('.swiper-button-next'),
                prevEl: $p.querySelector('.swiper-button-prev')
            }
            options.preloadImages = false
            options.lazy = {loadPrevNext: true}
            options.observer = true
            options.observeParents = true
            options.watchOverflow = true
            if(!options.speed) options.speed = 500
            options.roundLengths = false
            return options;
        };
        _functions.initSwiper = function(el){
            const swiper = new Swiper(el, _functions.getSwOptions(el))
            swiper.on('slideChange', (e) => {
                const $entry = el.closest('.swiper-entry')
                if ($entry) {
                    $entry.setAttribute('data-rel', 'slide-')
                }
            })
        };

        const $sw_container = document.querySelectorAll('.swiper-entry .swiper-container')
        $sw_container.forEach((e) => {
            _functions.initSwiper(e)
        })
        const $sw_thumbs = document.querySelectorAll('.swiper-thumbs')
        $sw_thumbs.forEach((e) => {
            const top = e.querySelector('.swiper-container.swiper-thumbs-top').swiper,
                bottom = e.querySelector('.swiper-container.swiper-thumbs-bottom').swiper
            top.thumbs.swiper = bottom
            top.thumbs.init()
            top.thumbs.update()
        })
        const $sw_control = document.querySelectorAll('.swiper-control')
        $sw_control.forEach((e) => {
            const top = e.querySelector('.swiper-container').swiper,
                bottom = e.querySelector('.swiper-container').swiper
            top.controller.control = bottom
            bottom.controller.control = top
        })

        /*###############*/
        /* POP-UP */
        /*###############*/

        _functions.popupClose = function(event) {
            const $p = event.target.closest('.popup-wrapper')
            $p.classList.remove('active')
            $p.querySelector('.popup-conteiner.active').classList.remove('active')
        }
        document.querySelector('.popup-overlay').addEventListener('click', _functions.popupClose)
        document.querySelectorAll('.popup-close').forEach((e) => {
            e.addEventListener('click', _functions.popupClose)
        })
        _functions.popupOpen = function(e) {
            const $p = document.querySelector('.popup-wrapper')
            $p.classList.add('active')
            document.querySelector(".popup-conteiner[data-rel='" + e +"']").classList.add('active')
        }
        document.querySelectorAll('.popup-open').forEach((e) => {
            e.addEventListener('click', function(event) {
                event.preventDefault()
                const d = this.getAttribute('data-rel')
                _functions.popupOpen(d)
            })
        })

        /*###############*/
        /* Program (show more) */
        /*###############*/
        const programBtnShowMore = document.querySelector('.program__wrapper .program__btn-show-more')
        if (programBtnShowMore) {
            programBtnShowMore.addEventListener('click', (event) => {
                const $p = event.target.closest('.program__wrapper')
                if ($p.classList.contains('show')){
                    $p.classList.remove('show')
                }else {
                    $p.classList.add('show')
                }
            })
        }

        /*###############*/
        /* ACCORDION */
        /*###############*/
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('accordion-header') || e.closest('.accordion-header')){
                const p = e.closest('.accordion-item')
                if(p.classList.contains('active')){
                    p.classList.remove('active')
                    _functions.slideUp(p.querySelector('.accordion-content'))
                }else{
                    p.classList.add('active')
                    _functions.slideDown(p.querySelector('.accordion-content'))
                }
            }
        })

        /*###############*/
        /* ANCHOR */
        /*###############*/
        /*
        const allAnchorLinks = document.querySelectorAll('.anchor-link');
        allAnchorLinks.forEach((e) => {
            e.addEventListener('click', function(e) {
                e.preventDefault();
                const c = this.getAttribute('href');
                const $el = document.querySelector(c)
                console.log($el)
                console.log($el.offsetTop)
                window.scroll({
                    top: $el.offsetTop - 50,
                    behavior: "smooth"
                })

            })
        })
        */

    })();
})
