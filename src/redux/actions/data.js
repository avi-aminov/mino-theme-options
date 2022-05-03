export const initData = (data) => {
    return {
      type: "INIT_DATA",
      payload: data,
    };
};

export const updateData = (data) => {
    return {
      type: "UPDATE_DATA",
      payload: data,
    };
};