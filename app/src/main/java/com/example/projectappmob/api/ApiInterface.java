package com.example.projectappmob.api;

import com.example.projectappmob.model.login.Login;
import com.example.projectappmob.model.register.Register;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.Headers;
import retrofit2.http.POST;

public interface ApiInterface {

    @FormUrlEncoded
    @POST("login.php")
    Call<Login> loginResponse(
            @Field("username") String username,
            @Field("password") String password
    );
    @Headers("Accept: application/json")
    @FormUrlEncoded
    @POST("register.php")
    Call<Register> registerResponse(
            @Field("username") String username,
            @Field("password") String password,
            @Field("email") String email,
            @Field("nohp") String nohp,
            @Field("namalengkap") String namalengkap
    );
}
