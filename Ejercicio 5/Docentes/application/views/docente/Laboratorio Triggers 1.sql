1.

CREATE OR REPLACE TRIGGER Tr_act_stock
AFTER INSERT ON PEDIDO_LIBROS
FOR EACH ROW
DECLARE
BEGIN
	Update LIBRO
	Set STOCK = STOCK - :NEW.cantidad
	Where codlibro = :NEW.codlibro;
END ;

INSERT into pedido_libros (codlibro,nropedido,cantidad)
values (1,2,2)
