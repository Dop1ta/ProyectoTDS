// import React from 'react';
// import {Button,Typography,Stack} from '@mui/material';
// import Box from '@mui/material/Box';
// import { Link } from 'react-router-dom';

// const ButtonList = () => {
//   const buttonData = [
//     { text: 'Crear, modificar o eliminar producto', color: 'primary' },
//     { text: 'Creacion de bodegas', color: 'secondary' },
//     { text: 'Ingreso de bebidas o traspaso entre bodegas', color: 'error' },
//   ];

//   return (
//     <Box display="flex" flexDirection="column" alignItems="center">
//       <Typography variant="h4" gutterBottom>
//         Que desea hacer?
//       </Typography>
//       {buttonData.map((button, index) => (
//         <Stack key={index}>
//           <Link to={'/'}>
//           <Button
//             variant="contained"
//             color={button.color}
//             size="large"
//             style={{ marginBottom: '10px' }}
//           >
//             {button.text}
//           </Button>
//         </Link>
//         </Stack>
//       ))}
//     </Box>
//   );
// };

// export default ButtonList;



import React from 'react';
import AppBar from '@mui/material/AppBar';
import Toolbar from '@mui/material/Toolbar';
import IconButton from '@mui/material/IconButton';
import MoreVertIcon from '@mui/icons-material/MoreVert';
import AddIcon from '@mui/icons-material/Add';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import Container from '@mui/material/Container';

const itemsData = [
  { id: 1, name: 'Item 1', flavor: 'Fruit', volume: '500ml' },
  { id: 2, name: 'Item 2', flavor: 'Cola', volume: '330ml' },
  { id: 3, name: 'Item 3', flavor: 'Citrus', volume: '750ml' },
  // ... add more items as needed
];

const App = () => {
  return (
    <div>
      <AppBar position="static">
        <Toolbar>
          <IconButton color="inherit">
            <AddIcon />
          </IconButton>
          <IconButton color="inherit">
            <MoreVertIcon />
          </IconButton>
        </Toolbar>
      </AppBar>
      <Container>
        <TableContainer component={Paper}>
          <Table>
            <TableHead>
              <TableRow>
                <TableCell>Nombre</TableCell>
                <TableCell>Sabor</TableCell>
                <TableCell>Tamaño</TableCell>
                <TableCell>Stock</TableCell>
              </TableRow>
            </TableHead>
            <TableBody>
              {itemsData.map((item) => (
                <TableRow key={item.id}>
                  <TableCell>{item.name}</TableCell>
                  <TableCell>{item.flavor}</TableCell>
                  <TableCell>{item.volume}</TableCell>
                </TableRow>
              ))}
            </TableBody>
          </Table>
        </TableContainer>
      </Container>
    </div>
  );
};

export default App;
