package code.shinobi.drugapp_android.model;

import com.google.gson.annotations.SerializedName;

import java.io.Serializable;

public class DrugDetailsModel implements Serializable{
    @SerializedName("name")
    private String name;

    @SerializedName("company_name")
    private String companyName;

    @SerializedName("email")
    private String email;

    @SerializedName("phone")
    private String phone;

    @SerializedName("dosage")
    private String dosage;

    @SerializedName("description")
    private String description;

    @SerializedName("side_effects")
    private String sideEffects;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCompanyName() {
        return companyName;
    }

    public void setCompanyName(String companyName) {
        this.companyName = companyName;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getDosage() {
        return dosage;
    }

    public void setDosage(String dosage) {
        this.dosage = dosage;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getSideEffects() {
        return sideEffects;
    }

    public void setSideEffects(String sideEffects) {
        this.sideEffects = sideEffects;
    }

    public DrugDetailsModel(String name, String companyName, String email, String phone,
                            String dosage, String description, String sideEffects){
        this.name = name;
        this.companyName = companyName;
        this.description = description;
        this.dosage = dosage;
        this.email = email;
        this.phone = phone;
        this.sideEffects = sideEffects;
    }
}
