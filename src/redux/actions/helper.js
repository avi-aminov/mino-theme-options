export const initHelper = (data) => {
    return {
      type: "INIT_HELPER",
      payload: data,
    };
};

export const updateHelper = (data) => {
    return {
      type: "UPDATE_HELPER",
      payload: data,
    };
};