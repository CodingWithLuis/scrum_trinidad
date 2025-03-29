import { Head, usePage } from "@inertiajs/react";
import AppLayout from "@/layouts/app-layout";
import { Toaster } from "sonner";
import { Link } from "@inertiajs/react";
import DeleteUserModal from "@/components/DeleteUserModal"; // Usamos Link de inertia para navegar sin recargar
import { useState } from "react"; // Importar useState para gestionar el estado del modal
import DataTable from 'datatables.net-react';
import DT from 'datatables.net-dt';
import languageES from 'datatables.net-plugins/i18n/es-ES.mjs';
import 'datatables.net-buttons-dt';
import 'datatables.net-responsive-dt';
import "datatables.net-buttons/js/buttons.html5";
import "datatables.net-buttons/js/buttons.print";
import jszip from 'jszip';

window.JSZip = jszip;

DataTable.use(DT);


export default function Customers() {

    const columns = [
        { data: 'name' },
        { data: 'district' },
    ];

    return (
        <AppLayout>
            <Head title="Users" />
            <Toaster position="top-right" richColors />

            <div className="flex flex-col gap-6 p-6 bg-white text-black shadow-lg rounded-xl dark:bg-black/10 dark:text-white">

                <DataTable ajax="/api/customers" options={{
                    language: languageES,
                    responsive: true,
                    layout: {
                        topStart: ['pageLength'],
                        topEnd: {
                            search: {
                                placeholder: 'Buscar'
                            }
                        }
                    },
                }} columns={columns} className="display">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Distrito</th>
                        </tr>
                    </thead>
                </DataTable>
            </div>
        </AppLayout>
    );
}
