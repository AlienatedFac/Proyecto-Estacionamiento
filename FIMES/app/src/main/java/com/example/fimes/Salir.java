package com.example.fimes;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
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

public class Salir extends AppCompatActivity {

    TextView txt, sal;
    String aidi, salida, datos;
    RequestQueue requestQueue;
    Button salir;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Intent welcome = this.getIntent();
        Bundle extra = welcome.getExtras();
        aidi = extra.getString("U");
        salida = extra.getString("salida");
        datos = extra.getString("datos");
        sal=(TextView)findViewById(R.id.textView4);
        sal.setText(salida);
        setContentView(R.layout.activity_salir);
        Thread myThread = null;
        Runnable runnable = new CountDownRunner();
        myThread= new Thread(runnable);
        myThread.start();
    }

    public void doWork() {
        runOnUiThread(new Runnable() {
            public void run() {
                try{
                    TextView txtCurrentTime= (TextView)findViewById(R.id.lbltime);
                    Date dt = new Date();
                    int hours = dt.getHours();
                    int minutes = dt.getMinutes();
                    int seconds = dt.getSeconds();
                    String curTime = hours + ":" + minutes + ":" + seconds;
                    txtCurrentTime.setText(curTime);
                }catch (Exception e) {}
            }
        });
    }


    class CountDownRunner implements Runnable{
        // @Override
        public void run() {
            while(!Thread.currentThread().isInterrupted()){
                try {
                    doWork();
                    Thread.sleep(1000);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }catch(Exception e){
                }
            }
        }
    }
}
