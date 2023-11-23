import cors from 'cors';
import { createServer } from 'http';
import express from 'express';
import { Server } from 'socket.io';

let app = express();
const httpServer = createServer(app);
const io = new Server(httpServer, { cors: { origin: '*' } });

// Config the socket connection
io.on('connection', (socket) => {
    console.log('Client connected:', socket.id);

    // Aquí puedes manejar eventos específicos cuando un cliente se conecta
    // Por ejemplo, emitir un mensaje de bienvenida al cliente
    socket.emit('mensaje', '¡Bienvenido!');

    // Maneja eventos personalizados desde el cliente
    socket.on('evento_cliente', (data) => {
        console.log('Evento del cliente:', data);
    });

    // Handle customer disconnection
    socket.on('disconnect', () => {
        console.log('Client disconnect:', socket.id);
    });
});

/**
 * Start Server Node
 */
app.set('port', process.env.PORT || 3000);

httpServer.listen(app.get('port'), function () {
    var port = httpServer.address().port;
    console.log('Server is Running and listener on PORT: ', port);
});