package com.example.fimes;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.widget.TextView;

import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;

public class Escaner extends AppCompatActivity {
    TextView txt;
    String aidi, salida;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        Intent welcome = this.getIntent();
        Bundle extra = welcome.getExtras();
        aidi = extra.getString("U");
        salida = extra.getString("salida");
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_escaner);
        new IntentIntegrator(this).initiateScan();
    }
    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data){
        super.onActivityResult(requestCode, resultCode, data);
        IntentResult result=IntentIntegrator.parseActivityResult(requestCode,resultCode,data);
        String datos =result.getContents();
        Intent welcome = new Intent(Escaner.this, Salir.class);
        welcome.putExtra("U", aidi);
        welcome.putExtra("salida", salida);
        welcome.putExtra("datos", datos );
        startActivity(welcome);
    }

}