import {HeaderClass} from '../components/_header';


let singleProjectPage = {
    readyFn : function() {
        let Header = new HeaderClass();
        Header.isForceScrolled = true;

        Header.initHeader();
    }
}

export {singleProjectPage};