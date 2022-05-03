import { combineReducers } from "redux";
import optionsReducer from "./optionsReducer";
import dataReducer from "./dataReducer";
import helperReducer from "./helperReducer";

const allReducers = combineReducers({
  dataReducer: dataReducer,
  optionsReducer: optionsReducer,
  helperReducer: helperReducer,
});

export default allReducers;