const _functions = {};

document.addEventListener('DOMContentLoaded', () => {

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
        /* valid */
        /*###############*/
        _functions.validForm = function(e) {
            const $f = e.target.closest('.form-group')
            let is_valid = true
            if ($f.querySelectorAll('.input-valid')) {
                $f.querySelectorAll('.input-valid').forEach((e) => {
                    const $pw = e.closest('.input-valid_wrapper')
                    if (!e.checkValidity()) {
                        e.classList.add('error')
                        $pw.classList.add('error')
                        is_valid = false
                    } else {
                        e.classList.remove('error')
                        $pw.classList.remove('error')
                    }
                })
            }
            return is_valid
        }

        /*###############*/
        /* mob.Menu */
        /*###############*/
        const menuItems = document.querySelectorAll('.header__inner .menu > li > a')
        menuItems.forEach(($e) => {
            $e.addEventListener('click', (event) => {
                event.preventDefault()
                if (window.innerWidth < 991) {
                    const $l = event.target.closest('li')
                    if ($l.classList.contains('open')) {
                        $l.classList.remove('open')
                        _functions.slideUp($l.querySelector('.sub-menu'))
                    } else {
                        $l.classList.add('open')
                        _functions.slideDown($l.querySelector('.sub-menu'))
                    }
                }
            })
        })

        if(document.querySelector('.header__burger')){
            document.querySelector('.header__burger').addEventListener('click', function(e) {
                const p = this.closest('.header')
                if(this.classList.contains('active-menu')){
                    this.classList.remove('active-menu')
                    p.classList.remove('active-menu')
                }else{
                    this.classList.add('active-menu')
                    p.classList.add('active-menu')
                }
            })
        }

        //

        /*###############*/
        /* Parallax */
        /*###############*/
        /*
        if(jQuery(window).width() > 991){
            jQuery('.move-objects').parallax();
        }
        */


        /*###############*/
        /* Scroll */
        /*###############*/
        /*
        jQuery('a.on-scroll').on('click', function(event){
            event.preventDefault();

            let a = jQuery(this).attr('href'),
                t = jQuery(a).offset().top - 30;

            jQuery('body,html').animate({scrollTop: t}, 800);

        });
        */

    })();

})
