export const initOptions = (data) => {
    return {
      type: "INIT_OPTIONS",
      payload: data,
    };
};

export const updateOptions = (data) => {
    return {
      type: "UPDATE_OPTIONS",
      payload: data,
    };
};