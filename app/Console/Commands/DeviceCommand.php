<?php

namespace App\Console\Commands;

use App\Models\Devices;
use Faker\Factory as Fk;
use Illuminate\Console\Command;

class DeviceCommand extends Command
{
    protected $signature = 'devices:create';
    protected $description = 'Para crear registros';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ramon1 = Fk::create();
        $ramon2 = Fk::create();
        $ramon3 = Fk::create();
        $ramon4 = Fk::create();
        $ramon5 = Fk::create();
        $ramon6 = Fk::create();
        $ramon7 = Fk::create();
        $ramon8 = Fk::create();
        $ramon9 = Fk::create();
        $ramon10 = Fk::create();

        $devices = [
            'ubicación'  => $ramon1->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon1->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon1->randomNumber(3, false),
            'comentario'  => $ramon1->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon1->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices2 = [
            'ubicación'  => $ramon2->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon2->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon2->randomNumber(3, false),
            'comentario'  => $ramon2->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon2->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices3 = [
            'ubicación'  => $ramon3->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon3->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon3->randomNumber(3, false),
            'comentario'  => $ramon3->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon3->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices4 = [
            'ubicación'  => $ramon4->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon4->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon4->randomNumber(3, false),
            'comentario'  => $ramon4->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon4->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices5 = [
            'ubicación'  => $ramon5->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon5->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon5->randomNumber(3, false),
            'comentario'  => $ramon5->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon5->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices6 = [
            'ubicación'  => $ramon6->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon6->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon6->randomNumber(3, false),
            'comentario'  => $ramon6->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon6->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices7 = [
            'ubicación'  => $ramon7->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon7->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon7->randomNumber(3, false),
            'comentario'  => $ramon7->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon7->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices8 = [
            'ubicación'  => $ramon8->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon8->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon8->randomNumber(3, false),
            'comentario'  => $ramon8->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon8->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices9 = [
            'ubicación'  => $ramon9->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon9->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon9->randomNumber(3, false),
            'comentario'  => $ramon9->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon9->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $devices10 = [
            'ubicación'  => $ramon10->randomElement([
                'Santo Domingo', 
                'Haina', 
                'Cotui', 
                'San cristobal', 
                'Santiago',
                'Punta Cana',
                'Vega',
                'Macoris'
            ]),
            'clima'      => $ramon10->randomElement([
                'Soleado',
                'Humedo',
                'Lluvioso',
                'Nublado'
            ]),
            'distancia'   => $ramon10->randomNumber(3, false),
            'comentario'  => $ramon10->randomElement([
                'Comentario de prueba',
                'Ejemplo',
                'Esto es un comentario'
            ]),
            'estado' => $ramon10->randomElement([
                'En movimiento',
                'En reposo',
                'Entregado',
                'En espera'
            ]),
        ];

        $rq = Devices::create($devices);
        $rq2 = Devices::create($devices2);
        $rq3 = Devices::create($devices3);
        $rq4 = Devices::create($devices4);
        $rq5 = Devices::create($devices5);
        $rq6 = Devices::create($devices6);
        $rq7 = Devices::create($devices7);
        $rq8 = Devices::create($devices8);
        $rq9 = Devices::create($devices9);
        $rq10 = Devices::create($devices10);
    }
}
