package com.example.fimes;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.Date;
import java.util.HashMap;
import java.util.Map;

public class Insertar extends AppCompatActivity {

    Button reservar, btntest;
    EditText hora_entrada, lugar, hora_salida;
    RequestQueue requestQueue;
    String aidi;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_insertar);
        Intent welcome = this.getIntent();
        Bundle extra = welcome.getExtras();
        aidi = extra.getString("U");
        hora_entrada = findViewById(R.id.edtLugar2);
        lugar = findViewById(R.id.edtLugar);
        hora_salida = findViewById(R.id.edtSalida);
        Date dt = new Date();
        int hours = dt.getHours();
        int minutes = dt.getMinutes();
        int seconds = dt.getSeconds();
        String curTime = hours + ":" + minutes + ":" + seconds;
        hora_entrada.setText(curTime);
        reservar = findViewById(R.id.button3);
        reservar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                ejecutarServicio("https://fimeses.000webhostapp.com/app/reserva.php");

            }
        });
    }
    private void ejecutarServicio(String URL){
        final String salida=  hora_salida.getText().toString();
        StringRequest stringRequest=new StringRequest(Request.Method.POST, URL, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                Toast.makeText(getApplicationContext(), "Escanee El codigo QR", Toast.LENGTH_SHORT).show();
                limpiarFormulario();
                Intent welcome = new Intent(Insertar.this, Escaner.class);
                welcome.putExtra("U", aidi);
                welcome.putExtra("salida", salida);
                startActivity(welcome);
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(), error.toString(),Toast.LENGTH_SHORT).show();
            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String,String> parametros=new HashMap<String, String>();

                parametros.put("lugar", lugar.getText().toString());
                parametros.put("hora_entrada", hora_entrada.getText().toString());
                parametros.put("hora_salida", hora_salida.getText().toString());
                parametros.put("id", aidi);
                return parametros;
            }
        };
        requestQueue= Volley.newRequestQueue(Insertar.this);
        requestQueue.add(stringRequest);
    }
    private void limpiarFormulario(){

        hora_salida.setText("");
        hora_entrada.setText("");
        lugar.setText("");
    }
}
