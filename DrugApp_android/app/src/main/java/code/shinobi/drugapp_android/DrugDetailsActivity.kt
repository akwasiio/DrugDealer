package code.shinobi.drugapp_android

import android.content.Intent
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import code.shinobi.drugapp_android.model.DrugDetailsModel
import kotlinx.android.synthetic.main.activity_detail__of__drugs.*

class DrugDetailsActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_detail__of__drugs)

        val intent = intent
        val model: DrugDetailsModel = intent.getSerializableExtra("Details Array") as DrugDetailsModel

        nameValueTextView.text = if(model.name == "-") " " else model.name
        companyValueTextView.text = if(model.companyName == "-") " " else model.companyName
        emailValueTextView.text = if(model.email == "-") " " else model.email
        phoneValueTextView.text = if(model.phone == "-") " " else model.phone
        dosageValueTextView.text = if(model.dosage == "-") " " else model.dosage
        descriptionValueTextView.text = if(model.description == "-") " " else model.description
        sideEffectValueTextView.text = if(model.sideEffects == "-") " " else model.sideEffects


    }
}
