
module.exports = {
    checkDevice : function() {
        var self = this;
        var body = document.getElementsByTagName('body')[0];
        //CHECK DEVICE AND SET A CLASS TO THE BODY
        body.classList.remove('isMobile', 'isTablet', 'isDesktop', 'isApple', 'isAndroid', 'isWindowsPhone', 'isBlackberry', 'no-touch');
    
        var deviceModel = self.getDeviceModel();
        var deviceKind  = self.getDeviceKind();
    
        for(var i in deviceModel) {
            body.classList.add(deviceModel[i]);
        }
    
        body.classList.add(deviceKind);
    
        if(!self.isTouchDevice() && !self.hasClass(body, 'isAndroid') && !self.hasClass(body, 'isIOS')) {
            body.classList.add('no-touch');
        }
    },

    getDeviceKind : function() {
        var widthDevice = this.widthDevice();
        var deviceKind = 'isDesktop';
    
        if (widthDevice <  768)                         deviceKind = 'isMobile';
        if (widthDevice >= 768 && widthDevice < 992)    deviceKind = 'isTablet';
        if (widthDevice >= 992)                         deviceKind = 'isDesktop';
    
        return deviceKind;
    },

    getDeviceModel : function() {
        var deviceModel = [];
        var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
    
        if (navigator.userAgent.match(/iphone|ipod|ipad/i))             deviceModel.push('isIOS');
        if (navigator.userAgent.match(/Android/i))                      deviceModel.push('isAndroid');
        if (navigator.userAgent.match(/iemobile/i))                     deviceModel.push('isWindowsPhone');
        if (navigator.userAgent.match(/BlackBerry/i))                   deviceModel.push('isBlackberry');
        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)  deviceModel.push('isFirefox');
        if (window.chrome)                                              deviceModel.push('isChrome');
        if (navigator.userAgent.match(/Android/i) && window.chrome)     deviceModel.push('isAndroid');
        if (is_safari)                                                  deviceModel.push('isSafari');
    
        return deviceModel;
    },

    isTouchDevice : function() {
        if(window.DocumentTouch && document instanceof DocumentTouch) {
    
            return true;
    
        } else {
    
            return false;
            
        }
    },

    widthDevice : function() {
        return (window.innerWidth > 0) ? window.innerWidth : screen.width;
    },    
    
    heightDevice : function() {
        return (window.innerHeight > 0) ? window.innerHeight : screen.height;
    },    
    
    hasClass : function( target, className ) {
        return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
    }
};