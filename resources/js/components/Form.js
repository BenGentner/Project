import Errors from "./Errors.js";
class Form
{
    constructor(data)
    {
        this.originalData = data;


        for (let field in data)
        {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data()
    {
        let data = Object.assign({}, this);

        delete data.originalData;

        delete data.errors;

        return data;
    }

    reset()
    {
        for (let field in this.originalData)
        {
            this[field] = '';
        }
        this.errors.clear();
    }

    post(url)
    {
        return this.submit('post', url);
    }

    delete(url)
    {
        return this.submit('delete', url);
    }

    get(url)
    {
        return this.submit('get', url);
    }

    submit(requestType, url)
    {
        return new Promise((resolve, reject) => {

            axios[requestType](url, this.data(), {
                headers: {
                    Authorization: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })

                .catch(error => {
                    this.onFail(error.response.data);

                    reject(error.response.data);
                });
        });

    }

    onSuccess(data)
    {
        //reset works for input fields only
        // this.reset();
    }

    onFail(error)
    {
        this.errors.record(error.errors)
    }

}

export default Form;
