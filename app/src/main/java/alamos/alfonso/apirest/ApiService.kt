package alamos.alfonso.apirest

import retrofit2.Call
import retrofit2.http.GET

interface ApiService {
    @GET("api.php") //Ruta de la API
    fun getUsers(): Call<List<User>>
}