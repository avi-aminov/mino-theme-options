import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from "react-redux";
import store from "./redux/store";
import App from './App';
import './main.scss';

document.addEventListener( 'DOMContentLoaded', function() {
    var element = document.getElementById( 'mino-theme-options-app' );
    if( typeof element !== 'undefined' && element !== null ) {
        ReactDOM.render( 
            <Provider store={store}>
                <App />
            </Provider>, element 
        );
    }
} );