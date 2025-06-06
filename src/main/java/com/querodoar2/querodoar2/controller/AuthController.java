package com.querodoar2.querodoar2.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.querodoar2.querodoar2.model.User;
import com.querodoar2.querodoar2.service.UserService;

@Controller
public class AuthController {

	@GetMapping("/login")
	public String login(@RequestParam(value = "mensagem", required = false) String mensagem, Model model) {
	    if (mensagem != null) {
	        model.addAttribute("mensagem", mensagem);
	    }
	    return "login"; // nome da página login.html
	}

    
    @GetMapping("/cadastro")
    public String showCadastroPage() {
        return "cadastro";  // sem .html → Spring busca em: src/main/resources/templates/cadastro.html
    }
    
    
    
    @Autowired
    private UserService userService;

    @PostMapping("/cadastro")
    public String processarCadastro(@ModelAttribute("user") User user, RedirectAttributes redirectAttributes) {
        userService.save(user); // ✅ CORRETO
        redirectAttributes.addFlashAttribute("mensagemSucesso", "Cadastro realizado com sucesso! Faça login para continuar.");
        return "redirect:/login";
    }

    
    @GetMapping("/homepage")
    public String homepage() {
        return "homepage";  // Aqui corresponde ao arquivo pos-login.html
    }
    
    
    @GetMapping("/doacao")
    public String doacao() {
        return "doacao";  // Aqui corresponde ao arquivo pos-login.html
    }
    
    
    @GetMapping("/poslogin")
    public String posLogin() {
        return "poslogin";  // Aqui corresponde ao arquivo pos-login.html
    }
    
}
