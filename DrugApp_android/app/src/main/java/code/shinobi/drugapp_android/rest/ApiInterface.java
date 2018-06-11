package code.shinobi.drugapp_android.rest;

import code.shinobi.drugapp_android.model.DrugDetailsModel;
import code.shinobi.drugapp_android.model.ResponseBody;
import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Path;
import retrofit2.http.Query;

public interface ApiInterface {
    @GET("api/{id}")
    Call<ResponseBody> getDrugDetails(@Path("id") String id);
}
