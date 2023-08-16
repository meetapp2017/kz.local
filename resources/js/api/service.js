var srv = {

    makeRequest: function (apiCall, data, resolve) {

        axios.post(apiCall, data, {
            header: {
                "Content-Type": "application/json",
            },
        })
            .then((response) => {
                resolve(response);
            })
            .catch((error) => {
                resolve(error);
            });

    },

    login: function (data) {

        return new Promise((resolve) => {

            this.makeRequest("/api/login", data, resolve);

        });

    },

    register: function (data) {

        return new Promise((resolve) => {

            this.makeRequest("/api/register", data, resolve);

        });

    }
}


export default srv
