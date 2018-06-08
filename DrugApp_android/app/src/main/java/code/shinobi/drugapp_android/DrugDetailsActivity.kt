package code.shinobi.drugapp_android

import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import kotlinx.android.synthetic.main.activity_detail__of__drugs.*

class DrugDetailsActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_detail__of__drugs)

        nameTextView.text = intent.extras.getString("Id Value")
    }
}
