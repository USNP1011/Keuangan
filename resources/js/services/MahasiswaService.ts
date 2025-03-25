import axios from "axios";
const controller = "api/mahasiswa"

const MahasiswaService = {
    getDataMahasiswa: async (): Promise<Models.Responses.MahasiswaResponse[]> => {
        try {
            return [] as Models.Responses.MahasiswaResponse[];
            // const url = controller;
            // const response = (await axios.get(url)).data as Models.ResponseRequest;
            // const result = response.data as Object;
            // return result as Models.Responses.MahasiswaResponse;
        } catch (err: any | Error) {
            console.log("error dari result", err.message);
            return Promise.reject(err);
        }
    },

}

export default MahasiswaService;