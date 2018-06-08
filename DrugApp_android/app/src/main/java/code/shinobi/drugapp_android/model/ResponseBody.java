package code.shinobi.drugapp_android.model;

import com.google.gson.annotations.SerializedName;

public class ResponseBody {
    @SerializedName("drug_request")
    private DrugDetailsModel result;

    @SerializedName("message")
    private String message;

    public void setMessage(String message) {
        this.message = message;
    }

    public String getMessage(){
        return message;
    }

    public void setResult(DrugDetailsModel result) {
        this.result = result;
    }

    public DrugDetailsModel getResult() {
        return result;
    }
}
