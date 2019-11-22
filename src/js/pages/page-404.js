import {HeaderClass} from '../components/_header';


let page404 = {
    readyFn : function() {
        let Header = new HeaderClass();
        Header.isForceScrolled = true;

        Header.initHeader();
    }
}

export {page404};