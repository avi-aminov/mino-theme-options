const inititalState = {};
const optionsReducer = (state = inititalState, action) => {
  switch (action.type) {
    case 'INIT_OPTIONS': {
      return { ...state, options: action.payload };
    }
    case 'UPDATE_OPTIONS': {
      return { ...state, options: action.payload };
    }
  }
  return state;
};
export default optionsReducer;