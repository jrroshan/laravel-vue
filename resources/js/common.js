export default {
    data() {
        return {};
    },
    methods: {
        callApi(method, url, dataObj) {
            try {
                return axios({
                    method: method,
                    url: url,
                    data: dataObj,
                });
            } catch (error) {
                return error.response;
            }
        },
        info(description,title = "Hey") {
            this.$Notice.info({
                title: title,
                desc: description,
            });
        },
        success(description,title = "Great") {
            this.$Notice.success({
                title: title,
                desc: description,
            });
        },
        warning(description,title = "Oops!") {
            this.$Notice.warning({
                title: title,
                desc: description,
            });
        },
        error(description,title = "Oops!") {
            this.$Notice.error({
                title: title,
                desc: description,
            });
        },
        somethingWentWrong(description="Something Went wrong! please try again",title = "Oops", ) {
            this.$Notice.error({
                title: title,
                desc: description,
            });
        },
    },
};
