package com.querodoar2.querodoar2.controller;

import com.querodoar2.querodoar2.DTOs.UserDTO;
import com.querodoar2.querodoar2.model.User;
import com.querodoar2.querodoar2.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/api/users")
public class UserController {

    @Autowired
    private UserService userService;

    @PostMapping("/register")
    public ResponseEntity<User> register(@RequestBody UserDTO userDTO){
        User user = new User();
        user.setNomeCompleto(userDTO.getNomeCompleto());
        user.setEmail(userDTO.getEmail());
        user.setSenha(userDTO.getSenha());
        user.setCpfCnpj(userDTO.getCpfCnpj());
        user.setCep(userDTO.getCep());
        user.setEstado(userDTO.getEstado());
        user.setCidade(userDTO.getCidade());

        User savedUser = userService.save(user);
        savedUser.setSenha(null);

        return ResponseEntity.status(HttpStatus.CREATED).body(savedUser);
    }

}
