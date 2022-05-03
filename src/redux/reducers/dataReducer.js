const inititalState = {};
const dataReducer = (state = inititalState, action) => {
  switch (action.type) {

    case 'INIT_DATA': {
      return { ...state, data: action.payload };
    }
    
    case 'UPDATE_DATA': {
      const newDataState = state;
      newDataState.data[action.payload.key] = action.payload.value;
      return newDataState
    }
  }
  return state;
};
export default dataReducer;