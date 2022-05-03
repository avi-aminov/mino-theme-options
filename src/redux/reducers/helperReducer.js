const inititalState = {};
const helperReducer = (state = inititalState, action) => {
  switch (action.type) {
    case 'INIT_HELPER': {
      return { ...state, helper: action.payload };
    }
    case 'UPDATE_HELPER': {
      return { ...state, helper: action.payload };
    }
  }
  return state;
};
export default helperReducer;